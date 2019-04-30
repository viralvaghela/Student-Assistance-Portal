<?php 
 $usr=$this->session->userdata('email');        
 $cmd=$this->db->query("select * from users where email= '$usr' "); 
 $row = $cmd->row_array();    
?>
<form class="form-horizontal" style="color: black"  action="#" name="updatefrm" id="updatefrm" enctype="multipart/form-data" method="POST">
    <fieldset>

        <!-- Form Name -->
        <legend>Update Profile</legend>
    
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="name">Name:</label>  
          <div class="col-md-6">
              <input id="name" name="name" value="<?php echo $row['name']; ?>" type="text" placeholder="Enter name" class="form-control input-md">

          </div>
      </div>

    


    <!-- image input-->
    <div class="form-group">
      <label class="col-md-6 control-label" for="image">Image</label>
      <div class="col-md-6">
        <input id="image" name="image" type="file" value="<?php echo $row['image']; ?>" class="form-control input-md">

    </div>
</div>



<!-- Select Multiple -->
<div class="form-group">
  <label class="col-md-4 control-label" for="intrest">Favorite technology</label>
  <div class="col-md-6">
    <select id="intrest" name="intrest" class="form-control"  multiple="multiple">
      <option value="C">C</option>
      <option value="C++">C++</option>
      <option value="JAVA">java</option>
      <option value="php,html,css,js">php,html,css,js</option>
      <option value="ruby">ruby</option>
      <option value="Machine Learning">machine Learning</option>
      <option value="Nureal Network">Nureal networks</option>
      <option value="Data Science">Data Science</option>
      <option value="Android">Android</option>
      <option value="iOS">iOS</option>
      <option value=".NET">.NET</option>
      <option value="Wordpress">Wordpress</option>
      <option value="DATABASE">DATABASE</option>
  </select>
</div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dob">Date Of Birth</label>  
  <div class="col-md-6">
      <input id="dob" name="dob" type="date" value="<?php echo $row['dob']; ?>" placeholder="" class="form-control input-md">

  </div>
</div>


<!-- Text input-->      
<div class="form-group">
  <label class="col-md-4 control-label" for="about">about</label>  
  <div class="col-md-6">
      <input id="about" name="about" type="text" value="<?php echo $row['about']; ?>" placeholder="Write about your self" class="form-control input-md">

  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Contact</label>  
  <div class="col-md-6">
      <input id="contact" name="contact" value="<?php echo $row['phone']; ?>" type="text" placeholder="Enter Contact number" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fb">Facebook</label>  
  <div class="col-md-6">
      <input id="fb" name="fb" type="text"value="<?php echo $row['fb']; ?>"  placeholder="Enter facebook url" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="twitter">Twitter</label>  
  <div class="col-md-6">
      <input id="tw" name="tw" type="text" value="<?php echo $row['twitter']; ?>" placeholder="Enter twitter url" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="insta">Instagram</label>  
  <div class="col-md-6">
      <input id="in" name="in" type="text" value="<?php echo $row['insta']; ?>" placeholder="Enter instagram url" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="linkedin">LinkedIn</label>  
  <div class="col-md-6">
      <input id="li" name="li" type="text" value="<?php echo $row['linkedin']; ?>" placeholder="Enter linkedin url" class="form-control input-md">

  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit">Submit</label>
  <div class="col-md-4">
      <button id="submit" name="submit" class="btn btn-success">Submit</button> 
  </div>
</div>

</fieldset>
</form>


<script type="text/javascript">
  $(document).ready(function(){
    var baseurl="<?php echo site_url();?>";
    $.validate({
      form : '#updatefrm, date, security, file',
      onSuccess : function($form) {
        var frm = document.getElementById('updatefrm');
        var frmdt = new FormData(frm);

        jQuery.ajax({
          url : baseurl + '/Welcome/update',
          type:'POST',
          data : frmdt,
          processData: false,
          contentType: false,
          async:false,
          success:function(data){
            console.log(data);
            

        }
    });
        return false; 
    }
});
});

</script>





