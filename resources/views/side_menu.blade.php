

<div class="col-lg-3 bg-clr" >

    <div class="col-lg-12">
        
        <div class="col-lg-12 br-bottom inactive" id="upload_file" onclick='redirect(this.id);'>
            Upload File
         
        </div>
        <div class="col-lg-12 br-bottom inactive" id="list" onclick='redirect(this.id);'>
            List Of Data
         
        </div>


    </div>
    

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	

 function redirect(id){

 	  
         if(id=='list'){

	     window.location.href='/list';
		 }
		 if(id=="upload_file")
		 {
		  window.location.href='/home';

		 }

	}

</script>