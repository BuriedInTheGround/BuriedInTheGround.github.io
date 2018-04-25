<?php
    class HomeController {
        function showHome() {
            include 'views/HomeView.php';
        }

        function showAboutMe() {
            include 'views/AboutMeView.php';
        }
    }