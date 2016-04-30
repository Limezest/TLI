<article class="form-group">
    <label for="keyword">Mot cl&#233;</label>
    <input type="text" class="form-control" id="keyword" name="keyword" pattern='.{ldelim}3,{rdelim}' placeholder="un mot">
    <label for="keywordList" class="mt">Liste des mots clés</label>
    <select id="keywordList" class="form-control">
        {getKeywords}
    </select>
</article>

<article class="col-sm-12 col-lg-12">
    <table id="resultDataTable" class="table table-hover table-striped" summary="R&#233;sultats de votre recherche">
            <thead>
            <tr>
                <th scope="col">Type</th>
                <th scope="col">Description</th>
                <th scope="col">M&#233;ridien</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
    </table>
</article>
<script src='js/search.js'></script>