<table class="table">
    <tr>
        <th><a href="index.php?module=order&action=list&sort=id">Id</a></th>
        <th><a href="index.php?module=order&action=list&sort=firstName">Vardas</a></th>
        <th><a href="index.php?module=order&action=list&sort=lastName">Pavardė</a></th>
        <th><a href="index.php?module=order&action=list&sort=email">Elektroninis paštas</a></th>
        <th><a href="index.php?module=order&action=list&sort=phoneNumber">Telefono numeris</a></th>
        <th><a href="index.php?module=order&action=list&sort=country">Valstybė</a></th>
        <th><a href="index.php?module=order&action=list&sort=city">Miestas</a></th>
        <th><a href="index.php?module=order&action=list&sort=streetAndHouseNumber">Gatvė ir namo numeris</a></th>
        <th><a href="index.php?module=order&action=list&sort=postalCode">Pašto kodas</a></th>
    </tr>
    <?php
    foreach ($data as $key => $val) {
        echo
        "<tr>"
        . "<td>" . htmlspecialchars($val['id']) . "</td>"
        . "<td>" . htmlspecialchars($val['firstName']) . "</td>"
        . "<td>" . htmlspecialchars($val['lastName']) . "</td>"
        . "<td>" . htmlspecialchars($val['email']) . "</td>"
        . "<td>" . htmlspecialchars($val['phoneNumber']) . "</td>"
        . "<td>" . htmlspecialchars($val['country']) . "</td>"
        . "<td>" . htmlspecialchars($val['city']) . "</td>"
        . "<td>" . htmlspecialchars($val['streetAndHouseNumber']) . "</td>"
        . "<td>" . htmlspecialchars($val['postalCode']) . "</td>"
        . "</tr>";
    }
    ?>
</table>

<?php
include 'templates/paging.tpl.php';
?>

