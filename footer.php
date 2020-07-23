
<?php if ( is_front_page() ) : ?>


<?php else : ?>
<section class="schedule__Sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-9 text-center text-md-left mb-3 mb-md-0">
                <div class="schedule__content text-white">
                    <p>Questions about your order form? VortX KleanAir Systems representatives are standing by to assist with all your coffee roasting filtration questions.</p>
                </div>
            </div>
            <div class="col-12 col-md-3 text-center text-md-right">
                <div class="schedule__btn text-center">
                    <a href="<?php echo get_page_link(15); ?>" class="btn btnwhite text-uppercase">Schedule A Call</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-3 mb-5">
                 <?php dynamic_sidebar( 'Footer #1' ); ?>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mb-5">
                 <?php dynamic_sidebar( 'Footer #2' ); ?>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mb-5">
                 <?php dynamic_sidebar( 'Footer #3' ); ?>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mb-5">
               
                <ul class="list-inline mb-0 foot__social">
                   <li class="list-inline-item">
                   <?php dynamic_sidebar( 'Footer #4' ); ?>
                   </li> 
                </ul>
            </div>
            <div class="col-12 col-md-12">
                <div class="footer-bottom  text-center">
                    <?php dynamic_sidebar( 'Copyright' ); ?>
                 
                </div>
            </div>
        </div>
    </div>
</footer>
    </div>
        </div>

	  </div>



 <?php wp_footer(); ?>
</div>
   </body>
</html>