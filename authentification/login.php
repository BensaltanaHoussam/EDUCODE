<?php
session_start();
require_once '../app/database/Database.php';

$db = new Database();
$conn = $db->connect();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM utilisateurs WHERE email = :email";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['mot_de_passe'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_role'] = $user['role'];

        if ($user['role'] == 'Etudiant') {
            header('Location: ../Dashboard/student/index.php');
        } elseif ($user['role'] == 'Enseignant') {
            header('Location: ../Dashboard/teacher/welcome.php');
        } elseif ($user['role'] == 'Administrateur') {
            header('Location: ../Dashboard/admin/index.php');
        }
        exit();
    } else {
        $error = "Invalid email or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDUCODE</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

</head>



<body>





    <section>
        <!-- Container -->
        <div class="grid gap-0 md:h-screen md:grid-cols-2">
            <!-- Component -->
            <div class="flex items-center justify-center px-5 py-16 md:px-10 md:py-20">
                <div class="max-w-md text-center">
                    <h2 class="mb-8 text-3xl font-bold md:mb-12 md:text-5xl lg:mb-16"> Start your 14-day free trial
                    </h2>
                    <!-- Form -->
                    <div class="mx-auto max-w-sm mb-4 pb-4">
                        <form name="wf-form-password" method="post">
                            <div class="relative">
                                <img alt=""
                                    src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a9455fae6cf89_EnvelopeSimple.svg"
                                    class="absolute left-5 top-3 inline-block" />
                                <input type="email" name="email"
                                    class="mb-4 block h-9 w-full rounded-md border border-solid border-black px-3 py-6 pl-14 text-sm text-black placeholder:text-black"
                                    placeholder="Email Address" required="" />
                            </div>
                            <div class="relative mb-4">
                                <img alt=""
                                    src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a946794e6cf8a_Lock-2.svg"
                                    class="absolute left-5 top-3 inline-block" />
                                <input type="password" name="password"
                                    class="mb-4 block h-9 w-full rounded-md border border-solid border-black px-3 py-6 pl-14 text-sm text-black placeholder:text-black"
                                    placeholder="Password (min 8 characters)" required="" />
                            </div>
                            <label class="mb-6 flex items-center justify-start pb-12 pl-5 font-medium md:mb-10 lg:mb-1">
                                <input type="checkbox" name="checkbox" class="float-left mt-1" />
                                <span class="ml-4 inline-block cursor-pointer text-sm" htmlFor="checkbox"> I agree with
                                    the <a href="#" class="font-bold"> Terms &amp; Conditions </a>
                                </span>
                            </label>
                            <?php if (isset($error)): ?>
                                <p class="text-red-500"><?php echo $error; ?></p>
                            <?php endif; ?>
                            <input type="submit" value="Login"
                                class="inline-block w-full cursor-pointer items-center bg-black px-6 py-3 text-center font-semibold text-white" />
                        </form>
                    </div>
                    <p class="text-sm text-gray-500 sm:text-sm"> You dont have an account? <a href="./signup.php"
                            class="font-bold text-black">
                            <span> </span> SignUP now
                        </a>
                    </p>
                </div>
            </div>
            <!-- Component -->
            <div class="flex items-center justify-center bg-gray-100">
                <div class="mx-auto max-w-md px-5 py-16 md:px-10 md:py-24 lg:py-32">
                    <div class="mb-5 flex h-14 w-14 flex-col items-center justify-center bg-white md:mb-6 lg:mb-8">
                        <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a949eade6cf7d_Vector-2.svg"
                            alt="" class="inline-block" />
                    </div>
                    <p class="mb-8 text-sm sm:text-base md:mb-12 lg:mb-16"> Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna,
                        porttitor rhoncus dolor purus non enim. </p>
                    <p class="text-sm font-bold sm:text-base">John Robert</p>
                    <p class="text-sm sm:text-sm">Senior Webflow Developer</p>
                </div>
            </div>
        </div>
    </section>





</body>

</html>