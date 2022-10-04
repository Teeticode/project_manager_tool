<?php $this->view("includes/dev/dev-header", $data)?>

  <!-- ======= Header ======= -->
  <?php $this->view("includes/dev/dev-nav", $data)?>
 
  <?php $this->view("includes/dev/dev-aside", $data)?>

<div class="card mt-5">
  <div class="card-body">
    <h5 class="card-title">Projects <button class="btn btn-primary float-end" style="border-radius: 0 !important;width: 120px; height:40px;">New Project</button></h5>

    <!-- Table with stripped rows -->
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Price</th>

          <th scope="col">Date</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Brandon Jacob</td>
          <td>Designer</td>
          <td>28</td>
          <td>2016-05-25</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Bridie Kessler</td>
          <td>Developer</td>
          <td>35</td>
          <td>2014-12-05</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Ashleigh Langosh</td>
          <td>Finance</td>
          <td>45</td>
          <td>2011-08-12</td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>Angus Grady</td>
          <td>HR</td>
          <td>34</td>
          <td>2012-06-11</td>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td>Raheem Lehner</td>
          <td>Dynamic Division Officer</td>
          <td>47</td>
          <td>2011-04-19</td>
        </tr>
      </tbody>
    </table>
    <!-- End Table with stripped rows -->

  </div>
</div>
<?php $this->view("includes/dev/dev-footer",$data)?>
  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <?php $this->view("includes/dev/dev-footnote", $data)?>