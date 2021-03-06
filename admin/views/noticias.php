<?php 

function my_autoload ($pClassName) {
    include("../models/" . $pClassName . ".php");
}

spl_autoload_register("my_autoload");

$oNoticia = new Noticias();
$oAlbum   = new Albuns();
$objFoto  = new Fotos();
$objVideo = new Videos();

require_once "_header.php";
require_once "menu.php"; 

?>

<div class="container" style="margin-bottom: 140px;">

    <!-- MODAL -->
    <div class="modal fade" id="atualizarNoticia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Atualizar Título</h4>
                </div>
                <div class="modal-body">
                    <form id="frmNoticiaU">
                        <input type="text" hidden="" id="idnoticiaU" name="idnoticiaU">
                        <label>Foto</label>
                        <input type="text" id="titulofotoU" name="titulofotoU" class="form-control input-sm">
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" id="btnAtualizaNoticia" class="btn btn-warning" data-dismiss="modal">Salvar</button>

                </div>
            </div>
        </div>
    </div>
    <!-- FIM MODAL -->

    <h3>CADASTRAR NOTÍCIAS</h3>

    <form id="form-noticia" method="POST" enctype="multipart/form-data">

        <label for="tituloNoticia">Título:</label>
        <input type="text" id="tituloNoticia" class="form-control" name="tituloNoticia" required="">


        <label for="conteudo">Conteúdo:</label>
        <textarea name="conteudo" id="conteudo" cols="30" rows="10"></textarea><br>

        <div class="row">
            <div class="col-md-6">
                <label for="idAlbum">Album:</label>
                <select name="idAlbum" id="idAlbum" class="form-control"><br>
                    <option value="">SELECIONE</option>
                    <?php foreach($oAlbum->listarAlbuns() as $album): ?>
                        <option value="<?php echo $album["idAlbum"] ?>"><?php echo $album["nomeAlbum"] ?></option>
                    <?php endforeach;  ?>
                </select>
            </div>
            <div class="col-md-6">
                <label for="idVideo">Video:</label>
                <select name="idVideo" id="idVideo" class="form-control">
                    <option value="">SELECIONE</option>
                    <?php foreach($objVideo->listarVideos() as $video): ?>
                        <option value="<?php echo $video["idVideo"] ?>"><?php echo $video["tituloVideo"] ?></option>
                    <?php endforeach;  ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="tipoNoticia">Tipo Notícia:</label>
                <select required="" name="tipoNoticia" id="tipoNoticia" class="form-control">
                    <option value="">SELECIONE</option>
                    <option value="N">Notícia</option>
                    <option value="A">Agenda</option>
                    <option value="E">Evento</option>
                </select>
            </div>
            <div class="col-md-6">

                <label for="foto"><i class="fa fa-image"></i> Adicionar uma Foto</label>
                <input type="file" id="foto" name="foto">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <input type="submit" class="btn btn-primary" value="Salvar">
            </div>
        </div>

    </form>

    <span id='response'></span>

    <hr>
    <?php  

    if($oNoticia->paginacao()["totalResult"] > 0):

      ?>

      <h3>LISTA DE NOTÍCIAS</h3>
      <table class="table table-hover">
        <thead>
            <tr>
                <th>Título</th>
                <th>Imagem</th>
                <th>Nome Album</th>
                <th>Entrada</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php 

                foreach ($oNoticia->paginacao()["objItens"] as $noticia) {
                  echo '<tr>';
                  echo '<td>'.$noticia["tituloNoticia"].'</td>'; 	        
                  if($noticia["thumb_imagem"] != "upload/thumbnail_")
                        $attrImg = "<img width='80' src='../{$noticia["thumb_imagem"]}'>";
                  echo "<td>$attrImg</td>";
                  echo '<td>'.$oAlbum->selecionarAlbum($noticia["idAlbum"]).'</td>'; 			
                  echo '<td>'.$oNoticia->formatDataPtbr($noticia["dataCaptura"]).'</td>'; 				 
                  echo '<td align="center"><a class="idNoticia apagar btn btn-danger" href='.$noticia["idNoticia"].'><i class="fa fa-close"></i></a> '; 
                  echo '<span class="btn btn-success" data-toggle="modal" data-target="#atualizarNoticia" 
                  onclick="adicionarDado('.$noticia["idNoticia"].',\''.$noticia["tituloNoticia"].'\')"><i class="fa fa-edit"></i></span>
                  </td>';	
                  echo '</tr>';
              }

              ?>

          </tbody>
      </table>
      <!-- MOSTRANDO OS BOTÕES DA PAGINAÇÃO -->
      <?php 

      echo $oNoticia->paginacao()["botoesPaginacao"]; 

  else:
   echo "Não há registro(s).";

endif; 
?>

</div> <!-- FIM CONTAINTER -->

<script type="text/javascript">

    $(function(){
        CKEDITOR.replace('conteudo');
    });

    function adicionarDado(idnoticia, titulofoto) {

        $('#idnoticiaU').val(idnoticia);
        $('#titulofotoU').val(titulofoto);
    }

</script>

<?php require_once "_footer.php"; ?>
