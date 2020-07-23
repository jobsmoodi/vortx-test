<?php 

if(is_admin())
{
    new Custom_orders();
}

	/**
	 * Custom_orders class will create the page to load the table
	 */
	class Custom_orders {
	    
	    /**
	     * Constructor will create the menu item
	     */
	    public function __construct()
	    {
	        add_action( 'admin_menu', array($this, 'order_menu' ));
	    }


	    /**
	     * Menu item will allow us to load the page to display the table
	     */
	    public function order_menu()
	    {
	        add_menu_page( 'Orders', 'Orders', 'manage_options', 'orders', array($this, 'list_table_page'), 'dashicons-cart', 24 );
	    }

	    /**
	     * Display the list table page
	     *
	     * @return Void
	     */
	    public function list_table_page()
	    {
	        $exampleListTable = new Orders_List_Table();
	        $exampleListTable->prepare_items();
	        ?>
	            <div class="wrap">
	                <div id="icon-users" class="icon32"></div>
	                <h2>Orders</h2>
	                <?php $exampleListTable->display(); ?>
	            </div>
	        <?php
	    }
	}
	
	// WP_List_Table is not loaded automatically so we need to load it in our application
	if( ! class_exists( 'WP_List_Table' ) ) {
	    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
	}


	/**
	 * Create a new table class that will extend the WP_List_Table
	 */
	class Orders_List_Table extends WP_List_Table {


	    /**
	     * Prepare the items for the table to process
	     *
	     * @return Void
	     */

        private function get_sql_results() {
        	global $wpdb;
	        $table_name = $wpdb->prefix . "vortx_order";
	        $sql_results = $wpdb->get_results("SELECT * FROM $table_name ORDER BY id DESC");
            return $sql_results; 
        }

        /**
         * @see WP_List_Table::ajax_user_can()
         */
        public function ajax_user_can() {
            return current_user_can('edit_posts');
        }

        /**
         * @see WP_List_Table::no_items()
         */
        public function no_items() {
            _e('No data found.');
        }

        /**
         * @see WP_List_Table::get_views()
         */
        public function get_views() {
            return array();
        }

        /**
         * @see WP_List_Table::get_columns()
         */
        public function get_columns() {
            $columns = array(
                'cb'  => '<input type="checkbox" />',
                'order_name' => __('Name'),
                'order_email' => __('Email'),
                'create_at'=> __('Created on'),
            );
            return $columns;
        }


        /**
         * Prepare data for display
         * @see WP_List_Table::prepare_items()
         */
        public function prepare_items() {
            $columns = $this->get_columns();
            $hidden = array();
            $this->_column_headers = array(
                $columns,
                $hidden,
                $sortable
            );

            // SQL results
            $posts = $this->get_sql_results();
            empty($posts) AND $posts = array();

            # >>>> Pagination
            $per_page = 10;
            $current_page = $this->get_pagenum();
            $total_items = count($posts);
            $this->set_pagination_args(array(
                'total_items' => $total_items,
                'per_page' => $per_page,
                'total_pages' => ceil($total_items / $per_page)
            ));
            $last_post = $current_page * $per_page;
            $first_post = $last_post - $per_page + 1;
            $last_post > $total_items AND $last_post = $total_items;
            $range = array_flip(range($first_post - 1, $last_post - 1, 1));
            $posts_array = array_intersect_key($posts, $range);
            $permalink = __('Edit:');
            
            $this->items = $posts_array;

        }

        /**
         * A single column
         */
        public function column_default($item, $column_name) {  
        	$etste = json_decode($item->order_details);
        	switch( $column_name ) { 
			    case 'id':
			   	    return $item->id;
			    case 'order_name':
			    	return $etste->user_name;
                case 'order_email':
                	return $etste->email_address;
			    case 'create_at':
			      return date('d-m-Y', strtotime($item->$column_name));
			    default:
			      return print_r( $item, true ) ; //Show the whole array for troubleshooting purposes$i++;
			  }
        }

        public function column_order_name($item){
        	$etste = json_decode($item->order_details);
	        $actions=array(
	        'view'=>sprintf('<a href="javascript:void(0);" data-id="'.$item->id.'" class="view_orders_data">View</a>' ,$etste->user_name , 'View'),
	        'delete'=>sprintf('<a href="javascript:void(0);" data-id="'.$item->id.'" class="delete_order">Delete</a>' ,$etste->user_name , 'Delete'),
	        
	        );
	        //Return the title contents
	        return sprintf('%1$s <span style="color:silver"></span>%2$s',
	            /*$1%s*/ $etste->user_name,
	            /*$2%s*/ $this->row_actions($actions)
	        );
	    }

	    public function column_cb($item) {

	        return sprintf(

	            '<input type="checkbox" name="employee[]" value="'.$item->id.'" />',

	            $this->_args['singular'],

	            $item->id

	        );

	    }

	}