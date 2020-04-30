<style>
    .table td {
        border: none;
    }

    .table td:first-child {
        width: 1px;
    }
</style>
<div class="row">
    <div class="col-md-3" style="border-right: 1px solid #ddd">
        <?php echo $sidebar ?>
    </div>
    <div class="col-md-9">
        <center>
            <a href="<?php echo base_url() ?>index.php/qr-complaint" class="btn btn-success">Buat Aduan</a>
        </center>

        <p>Cara Kerja Quick Response</p>
        <table class="table">
            <tr>
                <td>1</td>
                <td>Lorem Ipsum</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Lorem Ipsum</td>
            </tr>
        </table>
    </div>
</div>