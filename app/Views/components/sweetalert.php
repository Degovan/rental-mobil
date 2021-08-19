<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if (session()->has('error')) : ?>
    <script>
        Swal.fire({
            text: '<?= session()->get('error') ?>',
            icon: 'error'
        });
    </script>
<?php endif; ?>

<?php if (session()->has('message')) : ?>
    <script>
        Swal.fire({
            text: '<?= session()->get('message') ?>',
            icon: 'success'
        });
    </script>
<?php endif; ?>
