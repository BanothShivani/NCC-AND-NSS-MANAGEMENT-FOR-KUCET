<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/csrl3.jpg" sizes="16x16" type="image/gif">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Comments</title>
</head>

<body>
    <nav style="background: black;position:fixed;width:100%;z-index:1;display:flex;">
        <a href="home" style="padding:10px;text-decoration: none;font-size:20px;font-weight:900;color:black;background:white;">Home</a>
        <div style="text-align: center;width:90%;font-size:20px;padding:10px;font-weight:900;color:white;">
            Comments
        </div>
    </nav>
    <section style="background-color: #eee;">
        <div class="container my-0 py-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 col-lg-10 col-xl-8">
                    <?php
                    include "../phpscripts/dbconnet/dbresource.php";
                    $sql = "SELECT * FROM `footter_comments`";
                    $res = mysqli_query($conn, $sql);
                    $qres = mysqli_num_rows($res);
                    if ($qres > 0) {
                        while ($rows = mysqli_fetch_assoc($res)) {
                    ?>
                            <h5>Comment</h5>
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-start align-items-center">
                                        <img class="rounded-circle shadow-1-strong me-3" src="av" alt="avatar" width="60" height="60" />
                                        <div>
                                            <h6 class="fw-bold text-primary mb-1"><?php echo $rows["email_id"]; ?></h6>
                                            <p class="text-muted small mb-0">
                                                Shared publicly - <?php echo $rows["dtim"]; ?>
                                            </p>
                                        </div>
                                    </div>

                                    <p class="mt-3 mb-4 pb-2">
                                        <?php echo $rows["comment_discription"]; ?>
                                    </p>
                                </div>
                            </div>
                            <br><br>
                            <h5 style="text-align: end;">Reply</h5>
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-start align-items-center" style="flex-direction: row-reverse;">
                                        <img class="rounded-circle shadow-1-strong me-3 m-2" src="av" alt="avatar" width="60" height="60" />
                                        <div>
                                            <h6 class="fw-bold text-primary mb-1"><?php echo $rows["reply_mail"]; ?></h6>
                                            <p class="text-muted small mb-0">
                                                Shared publicly - <?php echo $rows["rdtim"]; ?>

                                            </p>
                                        </div>
                                    </div>

                                    <p class="mt-3 mb-4 pb-2" style="text-align: end;">
                                        <?php if ($rows["reply_comt"] == "") {
                                        ?>
                                    <form method="post" action="cmtrpl" style="text-align: end;">
                                        <input style="text-align: end;" type="number" name="sinom" value="<?php echo $rows['SiNo'];?>" class="form-control" placeholder="mail" required hidden><br>
                                        <input style="text-align: end;" type="email" name="rplymail" value="" class="form-control" placeholder="mail" required><br>
                                        <input style="text-align: end;" type="text" name="rplycmt" value="" class="form-control" placeholder="comment reply" required><br>
                                        <button class="btn btn-success" type="submit">reply</button>
                                    </form>
                                <?php
                                        } else {
                                            echo $rows["reply_comt"];
                                        }
                                ?>
                                </p>
                                </div>
                            </div>
                            <br><br>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <?php
    include "../attachments/fotter.php";
    ?>
</body>
</html>