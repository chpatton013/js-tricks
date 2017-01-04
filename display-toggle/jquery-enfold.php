<?
function add_jquery() {
   wp_enqueue_script(
      /* name */ 'jquery',
      /* uri */ 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js',
      /* dependencies */ array(),
      /* version */ '1.12.0',
      /* in footer */ false);
}
add_action('wp_enqueue_scripts', 'add_jquery', 100);
