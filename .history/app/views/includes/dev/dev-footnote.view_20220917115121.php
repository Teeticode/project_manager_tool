
  <script src="<?=ROOT?>/countries/assets/js/intlTelInput.js"></script>
  <script>
    var input = document.querySelector("#phoneno");
    var ii = document.querySelector(".iti__selected-flag");
    ii.title = window.localStorage.getItem("country")
    function set_co(title){
      var cont = document.querySelector(".iti__selected-flag")
      var title = cont.getAttribute("title");
      console.log(title);
      window.localStorage.setItem("country", title);
    }
    window.intlTelInput(input,{})
  </script>
  <!-- Vendor JS Files -->
  <script src="<?=ROOT?>/nice-admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?=ROOT?>/nice-admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=ROOT?>/nice-admin/assets/vendor/chart.js/chart.min.js"></script>
  <script src="<?=ROOT?>/nice-admin/assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?=ROOT?>/nice-admin/assets/vendor/quill/quill.min.js"></script>
  <script src="<?=ROOT?>/nice-admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?=ROOT?>/nice-admin/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?=ROOT?>/nice-admin/assets/vendor/php-email-form/validate.js"></script>
  
  <!-- Template Main JS File -->
  <script src="<?=ROOT?>/nice-admin/assets/js/main.js"></script>

  
</body>

</html>