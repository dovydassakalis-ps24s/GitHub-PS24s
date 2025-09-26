<?php
    class math {
      protected $m,$a;

      function set_data($a) {
        $this->m= $a;
      }

        function writeMsg($in ) {
          $this->a=$in * $this->m;
        }
        function get_data() {
         return  $this->m;
        }
    }

?>
