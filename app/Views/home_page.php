<!-- Extend the layout -->
<?= $this->extend('layouts/default') ?>

<!-- Define the content section -->
<?= $this->section('content') ?>

<?php include(APPPATH . 'Views/pages/home_slider.php'); ?>
<?php include(APPPATH . 'Views/pages/services.php'); ?>
<?php include(APPPATH . 'Views/pages/projects.php'); ?>
<?php include(APPPATH . 'Views/pages/team.php'); ?>
<?php include(APPPATH . 'Views/pages/news.php'); ?>
<?php include(APPPATH . 'Views/pages/contacts.php'); ?>

<?= $this->endSection() ?>