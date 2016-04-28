<article class="form-group">
        <form method="POST" action="index.php?page=search">
            <label for="keyword">Mot clé</label>
            <input type="text" class="form-control" name="keyword" placeholder="un mot" id="keyword">
            <input type="submit" class="button-submit btn btn-default pull-right" value="Rechercher">
            <input type="hidden" name="action" value="keyword">
            <input type="hidden" name="kind_action" value="search">
        </form>
</article>

<article>
    <table id="resultatDataTable">
    <tr>
        <th>Description</th>
        <th>Type</th>
        <th>Méridien</th>
    </tr>
    
</table>
    </table>
</article>