<?php 
    if (isset($_POST['btnsave'])) 
        {
            $Image=$_FILES['txtimage']['name'];
            $Folder="Image/";
            if ($Image)
            {
                $FileName=$Folder."_".$Image;
                $Copy=copy($_FILES['txtimage']['tmp_name'],$FileName);
                if (!$Copy) 
                {
                    echo "<script>alert('Error in Upload')</script>";
                }
                else
                {
                    echo "<script>alert('Successfully Upload')</script>";
                }
            }
        }	
 ?> 
 
 <form action="#" method="post" enctype="multipart/form-data">
    Choose Image:
    <input type="file" name="txtimage">
    <br>
    <input type="submit" name="btnsave" value="Save">
</form>