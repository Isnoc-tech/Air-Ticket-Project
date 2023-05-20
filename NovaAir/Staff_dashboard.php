<?php include "./db/db.php" ?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Dshboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./Staff_dashboard.css">
    <script src="./scripts/dashboard.js"></script>
</head>
<body>
    <section id="menu">
        <div class="logo">
            <img src="" alt="">
            <h2>NovaAir Airways</h2>
        </div>

        <div class="items">
            <li onclick="apearSystemAdmin()"><i class="fa-regular fa-screwdriver-wrench">System Administrator</i></li>
            <li onclick="apearAdmin()"><i class="fa-regular fa-screwdriver-wrench">Administrator</i></li>
            <li onclick="apearCustomerSr()"><i class="fa-regular fa-screwdriver-wrench">Customer Service Rep</i></li>
            <li onclick="apearMiantenanceStaff()"><i class="fa-regular fa-screwdriver-wrench">Maintenance Staff</i></li>
        </div>
    </section>

    <section id="interface">
            <div class="navigation">
                <div class="n1">
                    <div class="search">
                        <i class="far fa-search"></i>
                        <input type="text" placeholder="Search">
                    </div>
                </div>

                <div class="profile">
                    <i class="far fa-bell"></i>
                    <img src="./dashboard_profile_pic/WhatsApp Image 2023-05-14 at 00.01.52.jpg" alt="">
                </div>
            </div>

            <h3 class="i-name">
                Dashboard
            </h3>
            
            <!---------------------------------- Dynamic area start ----------------------------------------------->
            <div id="main-content">

            </div>
            <!--------------------------------- Dynamic area end -------------------------------------------->
    </section>
</body>
</html>

<?php $conn->close(); ?>