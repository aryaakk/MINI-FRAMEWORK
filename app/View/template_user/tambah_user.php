<main>
    <div class="header">
        <h1>TAMBAH DATA USER</h1>
    </div>
    <form action="<?= \staditek\OOP\App\Core\Router::url("/public/save")?>" method="post">
        <div class="formGrup">
            <label for="">NAMA</label>
            <div class="form-inp">
                <input class="inp" required type="text" name="nama" id="nama" placeholder="Enter Name">
            </div>
        </div>
        <div class="formGrup">
            <label for="">EMAIL</label>
            <div class="form-inp">
                <input class="inp" required type="email" name="email" id="email" placeholder="Enter Email">
            </div>
        </div>
        <div class="formGrup">
            <label for="">PHONE NUMBER</label>
            <div class="form-inp">
                <input class="inp" required type="text" name="phone" id="phone" placeholder="Enter Phone Number">
            </div>
        </div>
        <div class="formGrup">
            <label for="">PASSWORD</label>
            <div class="form-inp">
                <input class="inp" required type="text" name="password" id="password" placeholder="Enter Password">
            </div>
        </div>
        <div class="formGrup">
            <div class="form-sub">
                <input class="sub" required type="submit" name="" id="" value="Savee">
                <a href="<?= \staditek\OOP\App\Core\Router::url("/public/tampil")?>">Back</a>
            </div>
        </div>
    </form>
</main>