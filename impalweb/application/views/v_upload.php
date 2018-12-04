<!DOCTYPE html>
<html lang="en">




  <body>

    <?php include 'header.php'; ?>         
      <h1>File Upload</h1>
      <?php echo $error;?>
      <?php echo form_open_multipart('Transaksi/do_upload');?>
      <input type="file" name="userfile" size="20" />
      <input type="submit" value="upload" />
      </form>
    <?php include 'footer.php';?>


  </body>

</html>


