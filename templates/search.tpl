<article class="form-group">
        <form method="POST" action="index.php?page=search">
            <label for="keyword">Mot clé</label>
            <input type="text" class="form-control" name="keyword" placeholder="un mot">
            <input type="submit" class="button-submit btn btn-default pull-right" value="Rechercher">
            <input type="hidden" name="action" value="search">
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