<?php
$role = "staff";

switch ($role) {
    case "admin":
        echo "Full access granted";
        break;
    case "editor":
        echo "Access to manage content";
        break;
    case "staff":
        echo "Access to create content";
        break;

}