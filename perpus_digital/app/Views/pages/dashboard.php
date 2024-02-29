<?= view('layout/header')?>

<?= view('layout/nav')?>

<div class="row">

    <div class="col-lg-12">
        <div class="card bg-primary text-black">
        <div class="card-title">
            <h6>apa yang ingin anda lakukan?</h6>
            </div>

        <div class="card-body">
            <a href="/buku">        <button class="btn btn-warning">Daftar Buku</button></a>
            <a href="/peminjaman">  <button class="btn btn-danger">Peminjaman Buku</button></a>
             <?php  if(session()->get('level')== "peminjam"){ ?>
            <a href="/koleksi">     <button class="btn btn-success">Koleksi Pribadi Buku</button></a>
            <?php }?>
          
            </div>
        </div>

    </div>

   







</div>


<?= view('layout/footer')?>

