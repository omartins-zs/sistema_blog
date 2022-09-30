<div class="card shadow mb-4">
    <div class="card-header py-3"></div>
    <div class="card-body">
        <form>
            <div class="form-group">
                <label class="small mb-1" for="inputUsername">Upload da imagem</label>
                <img src="..." id="img_url" alt="Sua imagem" class="img-thumbnail">
                <input class="form-control-file mt-2" id="inputUsername" type="file" onchange="img_pathUrl(this)">
            </div>
            <div class="form-group">
                <label class="small mb-1" for="inputUsername">Titulo</label>
                <input class="form-control" id="inputUsername" type="text" value="">
            </div>
            <div class="form-group">
                <label class="small mb-1" for="exampleFormControlTextarea1">Descrição</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label class="small mb-1" for="exampleFormControlSelect2">Selecioanar categoria</label>
                <select class="form-control" id="exampleFormControlSelect2">
                    <option>1</option>
                    <option>1</option>
                    <option>1</option>
                    <option>1</option>
                    <option>1</option>
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Registrar post</button>
        </form>
    </div>
</div>
<!-- 
            <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
        </div>
        <div class="col-sm-6">
            <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
        </div>
    </div>
    <a href="login.html" class="btn btn-primary btn-user btn-block">
        Register Account
    </a> -->