
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

  <script>
    var tab = sessionStorage.getItem("tab") ? sessionStorage.getItem("tab"): "#profile-edit";
    
    
    function show_tab(tab_name){   
      const someTabTriggerEl = document.querySelector(tab_name);
      const tabn = new bootstrap.Tab(someTabTriggerEl);
      tabn.show();
    }
    function set_tab(tab_name){
      sessionStorage.setItem("tab", tab_name);
    }

    function load_image(file){
      document.querySelector('.js-filename').innerHTML = "Selected File: " + file.name;
      var mylink = window.URL.createObjectURL(file);

      document.querySelector('.js-image-preview').src = mylink;
    }
    window.onload = ()=>{
      show_tab("#profile-edit");
      
    }
  </script>
</body>

</html>