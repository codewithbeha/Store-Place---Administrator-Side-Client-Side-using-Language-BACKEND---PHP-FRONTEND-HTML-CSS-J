<?php
include '../components/header.php';
include_once '../businessLogic/variables.php';
include_once '../rights/userMapper.php';
if (isset($_SESSION["role"]) && $_SESSION['role'] == '1') {
    $mapper =  new UserMapper();
    $userList = $mapper->getAllUsers();
} else {
    header("Location:./views/index.php");
}


?>

<div>
    <h1>This is Dashboard page</h1>
    <div>
        <h2>User list:</h2>
        <table>
            <thead>
                <tr>
                    <td>Username</td>
                    <td>Fullname</td>
                    <td>Email</td>
                    <td>Detajet</td>
                    <td>Modifiko</td>
                    <td>Fshij</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($userList as $user) {
                ?>
                    <tr>
                        <td><?php echo $user['userName']; ?></td>
                        <td><?php echo $user['userLastName']; ?></td>
                        <td><?php echo $user['userEmail']; ?></td>
                        <td><a href=<?php echo "../businessLogic/detailsUser.php?id=" . $user['UserID']; //to be continued by students
                                    ?>>Detajet</a></td>
                        <td><a href=<?php echo "../rights/editUser.php?id=" . $user['UserID'];
                                    ?>>Modifiko</td>
                        <td><a href=<?php echo "../rights/deleteUser.php?id=" . $user['UserID'];
                                    ?>>Fshij</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>




<?php
include '../components/footer.php'
?>