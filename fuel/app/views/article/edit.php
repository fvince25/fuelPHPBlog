<?php

use Fuel\Core\Form;
use Fuel\Core\Session;

?>

<section class="OneArticle">
    <h1>Modifier un article</h1>
    <?= Form::open( array("action" => "articles/edit/".$article->id)); ?>
    <div>Titre</div>
    <?= Form::input("title", $article->title ) ?>
    <div>Contenu</div>
    <?= Form::textarea("content", $article->content) ?>
    <?= Form::submit("submit", "Sauvegarder") ?>
    <?= Form::close() ?>
</section>
<button id="Ajax" type="button" class="btn btn-success">Ajax</button>
<button id="Rest" type="button" class="btn btn-warning">Rest</button>

<table id="table_id" class="display dataTable">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table>
<script type="application/javascript">

    $(() => {
            $('#table_id').DataTable({
                ordering: true,
                select: true
            });

            $('#Ajax').on('click',()=> {

                $.ajax ({
                    url:        '/ajax/ajax',
                    type:       'POST',
                    dataType:   'json',
                    async:      true,

                    success: function(data, status) {
                        console.log("results :", data, status);
                    },

                    error : function(xhr, textStatus, errorThrown) {
                        alert('Ajax request failed.');
                    }
                });

            })

            $('#Rest').on('click',()=> {

                $.ajax({
                    url: '/test/list',
                    type: 'GET',
                    dataType: 'json',
                    async: true,
                    data: {
                        "dodo": 1,
                        "lolo": 2
                    },

                    success: function (data, status) {
                        console.log("results :", data, status);
                    },

                    error: function (xhr, textStatus, errorThrown) {
                        alert('Ajax request failed.');
                    }
                });

            })
        }
    )

</script>