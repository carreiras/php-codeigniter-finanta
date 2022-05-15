<?= $this->extend('application/layout/principal'); ?>

<?= $this->section('estilos'); ?>
<link href="<?=site_url();?>css/styles.css" rel="stylesheet"> 
<link href="<?=site_url();?>css/docs.css" rel="stylesheet"> 
<link href="<?=site_url();?>css/util.css" rel="stylesheet"> 
<link href="<?=site_url();?>css/card_counts.css" rel="stylesheet"> 
<?= $this->endSection(); ?>

<?= $this->section('scripts'); ?>
<script src="https://kit.fontawesome.com/f614d443d8.js" crossorigin="anonymous"></script>
<script src="<?=site_url();?>js/docs.js"></script>
<?= $this->endSection(); ?>

<?= $this->section('contents'); ?>
<?php echo $this->include('application/home/contents'); ?>
<?= $this->endSection(); ?>