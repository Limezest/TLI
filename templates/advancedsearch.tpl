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
            <tr>
                <td>1</td>
                <td>Michael</td>
                <td>Are formatted like this</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Lucille</td>
                <td>Do you like them?</td>
            </tr>
            <tr class="success">
                <td>3</td>
                <td>Success</td>
                <td></td>
            </tr>
            <tr class="danger">
                <td>4</td>
                <td>Danger</td>
                <td></td>
            </tr>
            <tr class="warning">
                <td>5</td>
                <td>Warning</td>
                <td></td>
            </tr>
            <tr class="active">
                <td>6</td>
                <td>Active</td>
                <td></td>
            </tr>
            </tbody>
    </table>
</article>