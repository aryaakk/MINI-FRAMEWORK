<main>
    <div class="header">
        <h1>EDIT DATA USER</h1>
    </div>
    <form action="<?= \staditek\OOP\App\Core\Router::url('/public/update')?>" method="post">
        <div class="formGrup">
            <label for="">NAMA</label>
            <div class="form-inp">
                <input class="inp" required value="<?= $data->id?>" type="hidden" name="id" id="id" placeholder="Enter Name">
                <input class="inp" required value="<?= $data->nama?>" type="text" name="nama" id="nama" placeholder="Enter Name">
            </div>
        </div>
        <div class="formGrup">
            <label for="">EMAIL</label>
            <div class="form-inp">
                <input class="inp" required value="<?= $data->email?>" type="email" name="email" id="email" placeholder="Enter Email">
            </div>
        </div>
        <div class="formGrup">
            <label for="">PHONE NUMBER</label>
            <div class="form-inp">
                <input class="inp" required value="<?= $data->phone?>" type="text" name="phone" id="phone" placeholder="Enter Phone Number">
            </div>
        </div>
        <div class="formGrup">
            <label for="">PASSWORD</label>
            <div class="form-inp">
                <input class="inp" required value="<?= $data->password?>" type="text" name="password" id="password" placeholder="Enter Phone Number">
            </div>
        </div>
        <div class="formGrup">
            <label for="">CREATED AT</label>
            <div class="form-inp">
                <input class="inp" required value="<?= $data->created_at?>" type="datetime-local" name="create" id="create">
            </div>
        </div>
        <div class="formGrup">
            <label for="">UPDATE AT</label>
            <div class="form-inp">
                <input class="inp"  value="<?= $data->update_at?>" type="datetime-local" name="update" id="uppdate" >
            </div>
        </div>
        <div class="formGrup">
            <div class="form-sub">
                <input class="sub" required type="submit" name="" id="" value="Updatee">
                <a href="<?= \staditek\OOP\App\Core\Router::url("/public/tampil")?>">Back</a>
            </div>
        </div>
    </form>
</main>