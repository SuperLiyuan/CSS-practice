<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Clothing</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/29105e638c.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <?php include('include/header.php') ?>
    </header>
    <main>
    <section class="table1">
    <div class="tab">
        <div class="table-content">
      <table id ="mainTable">
      <tbody>
        <tr>
          <td>
          <img src="./images/tr11.webp" alt="1-1">
           <p>Green Blazer by Banana Republic</p><br>
          </td>
          <td>
         <img src="./images/tr12.webp" alt="1-2">
           <p>Wide-leg Jeans by True Religion</p><br>
          </td>
          <td>
          <img src="./images/yellow-jacket-1.webp" alt="1-3">
           <p>Yellow Jacket by Banana Republic</p><br>
          </td>
        </tr>
        <tr>
          <td>
         <img src="images/black-jacket-1.webp" alt="1-4">
           <p>Yellow Jacket by Banana Republic</p><br><br>
          </td>
          <td>
          <img src="./images/white-shoes-1.webp" alt="1-5">
           <p>White shoes by Margaret Howell</p><br><br>
          </td>
          <td>
          <img src="./images/tr16.jpg" alt="1-6">
           <p>Bride Dress by Vera Wang</p><br><br>
          </td>
        </tr>
        <tr>
          <td>
         <img src="./images/tr17.jpg" alt="1-7">
           <p>Black Dress by Banana Republic</p><br><br>
          </td>
          <td>
          <img src="./images/tr18.jpg" alt="1-8">
           <p>Dress by Banana Republic</p><br><br>
          </td>
          <td>
          <img src="./images/tr11.webp" alt="1-1">
           <p>Green Blazer by Banana Republic</p><br><br>
          </td>
        </tr>
        </tbody>
    </table>
    <div class="table-display"><p>Showing 1 to 9 of 18 items</p></div>
    <div class="pagination1">
            <label class="disabled" for="table_radio_-1">&laquo; Previous</label>
            <label class="active" for="table_radio_0" id="table_pager_0">1</label>
            <label for="table_radio_1" id="table_pager_1">2</label>
            <label for="table_radio_1">Next &raquo;</label>
          </div>
          <table id = "second-table">
      <tbody>
        <tr>
          <td>
          <img src="../images/green-bag-1.webp"  alt="2-1">
           <p>Black Dress by Banana Republic</p><br><br>
          </td>
          <td>
          <img src="../images/black-bag-2.webp"  alt="2-2">
           <p>Green Blazer by Banana Republic</p><br><br>
          </td>
          <td>
          <img src="../images/pink-dress-1.webp"  alt="2-3">
           <p>Green Blazer by Banana Republic</p><br><br>
          </td>
        </tr>
        <tr>
          <td>
          <img src="../images/black-shoes-1.webp" alt="2-4">
           <p>Green Blazer by Banana Republic</p><br><br>
          </td>
          <td>
          <img src="../images/white-dress-1.webp" alt="2-5">
           <p>Green Blazer by Banana Republic</p><br><br>
          </td>
          <td>
          <img src="../images/green-bag-1.webp" alt="2-6">
           <p>Green Blazer by Banana Republic</p><br><br>
          </td>
        </tr>
        <tr>
          <td>
          <img src="../images/tr21.webp" alt="1-1">
           <p>Green Blazer by Banana Republic</p><br><br>
          </td>
          <td>
          <img src="../exercise/images/tr11.webp"  alt="1-1">
           <p>Green Blazer by Banana Republic</p><br><br>
          </td>
          <td>
          <img src="../exercise/images/tr11.webp" alt="1-1">
           <p>Green Blazer by Banana Republic</p><br><br>
          </td>
        </tr>
        </tbody>
    </table>
   
    <div class="table-display"><p>Showing 10 to 18 of 18 items</p></div>
    <div class="pagination2">
            <label for="table_radio_0">&laquo; Previous</label>
            <label for="table_radio_0" id="table_pager_0">1</label>
            <label class="active" for="table_radio_1" id="table_pager_1">2</label>
          </div>
        </div>
      </div>
    </section>
    </main>
    <footer><?php include('include/footer.php') ?></footer>
</body>
</html>
