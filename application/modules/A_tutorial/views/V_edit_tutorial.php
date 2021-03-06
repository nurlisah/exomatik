           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Data Tutorial</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Beranda</a>
                        </li>
                        <li>
                            Data tutorial
                        </li>
                        <li class="active">
                            <strong>Edit Data tutorial </strong>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrapper wrapper-content">
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col-md-12">
                        <a href="<?=base_url('A_tutorial')?>">
                            <button class="btn btn-info btn-rounded col-md-3" >Kembali </button>
                        </a>
                    </div>
                </div>
                <div class="row">

                <!-- awal form portofolio -->
                    <div class="col-md-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Form Input Data tutorial</h5>
                            </div>
                            <div>
                                <div class="ibox-content">
                                    
                                    <form action="<?=base_url('admin/tutorial/update')?>" method="post" enctype="multipart/form-data" onsubmit="return postForm()">
                                        <input type="hidden" name="id_tutorial" value="<?=$data['id_tutorial']?>">
                                        <input type="hidden" name="gambar_lama" value="<?=$data['gambar_tutorial']?>">
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Jenis Tutorial</label>
                                                <div class="col-sm-10" >
                                                    <select name="jenis_t" class="form-control" id='jenis_t' onchange="dataKategori();" required>
                                                        <option>Pilih Jenis Tutorial</option>
                                                    <?php for($i=0;$i<count($jenis);$i++){?>
                                                        <option value="<?=$jenis[$i]['id_jenis_tutorial']?>" <?php if($data['id_jt']==$jenis[$i]['id_jenis_tutorial'])echo "selected";?>><?=$jenis[$i]['nama_jenis_tutorial']?></option>
                                                    <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Kategori Tutorial</label>
                                                <div class="col-sm-10" >
                                                    <select name="kategori_t" id="kategori_t" class="form-control" required>
                                                       <?php for ($i=0; $i < count($kategori); $i++) { ?>
                                                       <option value="<?=$kategori[$i]['id_kt']?>" <?php if($data['id_kt']==$kategori[$i]['id_kt'])echo "selected";?>><?=$kategori[$i]['nama_kt']?></option>
                                                       <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Judul tutorial</label>
                                                <div class="col-sm-10"><input type="text" name="judul_tutorial" class="form-control" placeholder="Masukkan Judul tutorial" value="<?=$data['judul_tutorial']?>" required></div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Gambar DP tutorial</label>
                                                <div class="col-sm-6"><input type="file" name="gambar_tutorial" class="form-control">
                                                * input jika ingin mengganti gambar</div>
                                                <div class="col-sm-4">
                                                    <img src="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Deskripsi Singkat</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="deskripsi" maxlength="250" required><?=$data['deskripsi_tutorial']?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Nonaktifkan</label>
                                                <div class="col-sm-10" >
                                                    <select name="nonaktif_tutorial" class="form-control" required>
                                                       <option value="tidak" <?php if($data['nonaktif_tutorial']=='tidak')echo 'selected';?>>Tidak</option>
                                                       <option value="ya" <?php if($data['nonaktif_tutorial']=='ya')echo 'selected';?>>Ya</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="ibox-content no-padding">
                                                <textarea id="summernote" name="content"><?=$data['isi_tutorial']?>
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="pull-right">
                                                <button type="reset" class="btn btn-danger btn-rounded"> Reset </button>
                                                <button type="submit" class="btn btn-info btn-rounded"> Kirim </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- batas form  -->
                </div>
                <script type="text/javascript">
                    function dataKategori(){
                        $('#kategori_t').html('');
                         $.ajax({
                            url: "<?=base_url('A_tutorial/select_data_kategori_tambah_tutorial')?>",
                            type: "POST",
                            data: {id: $("#jenis_t").val()},
                            dataType: "text",
                            success: function(hasil) {
                                var Skategori = $.parseJSON(hasil);

                                for (var i=0;i<Skategori.length;++i){
                                    $('#kategori_t').append('<option value="'+Skategori[i].id_kt+'">'+Skategori[i].nama_kt+'</option>');
                                }
                            }
                        });
                    }
                </script>
 