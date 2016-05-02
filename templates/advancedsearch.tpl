<article class="form-group">
        <form method="POST" action="/tli/advancedsearch">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" placeholder="Une petite description">
            <label for="type">Type</label>
            <select name="patho" class="form-control">
                {genSelect choix='patho_type'}
            </select>
            <label for="meridien">Méridien</label>
            <select name="meridien" class="form-control">
                {genSelect choix='meridien_nom'}
            </select>
            <input type="submit" class="button-submit btn btn-default pull-right" value="Rechercher">
            <input type="hidden" name="action" value="filter">
            <input type="hidden" name="kind_action" value="search">
        </form>
</article>

<article>
    <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Tables</th>
            </tr>
            </thead>
            <tbody>
           </tbody>
    </table>
</article>
<script src="js/advancedsearch.js"></script>
