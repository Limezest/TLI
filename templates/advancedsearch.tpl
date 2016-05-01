<article class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Une petite description" tabIndex="0">
            <label for="type">Type</label>
            <select name="patho" class="form-control" id="pathoList">
		<option value='defaultPatho'>-- Liste de pathologies --</option>
                {genSelect choix='patho_type'}
            </select>
            <label for="meridien">Méridien</label>
            <select name="meridien" class="form-control" id="meridienList">
		<option value='defaultMeridien'>-- Liste des m&#233;ridiens --</option>
                {genSelect choix='meridien_nom'}
            </select>
            <input type="hidden" name="action" value="filter">
            <input type="hidden" name="kind_action" value="search">
</article>

<article class="mt col-sm-12 col-lg-12">
    <table class="table table-hover" summmary="R&#233;sultat(s) de votre recherche">
            <thead>
            <tr>
                <th scope="col">Type</th>
                <th scope="col">Pathologie</th>
                <th scope="col">M&#233;ridien</th>
            </tr>
            </thead>
            <tbody>
<!--
            <tr>
                <td scope="row">1</td>
                <td>Michael</td>
                <td>Are formatted like this</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Lucille</td>
                <td>Do you like them?</td>
            </tr>
            <tr class="success">
                <td scope="row">3</td>
                <td>Success</td>
                <td></td>
            </tr>
            <tr class="danger">
                <td scope="row">4</td>
                <td>Danger</td>
                <td></td>
            </tr>
            <tr class="warning">
                <td scope="row">5</td>
                <td>Warning</td>
                <td></td>
            </tr>
            <tr class="active">
                <td scope="row">6</td>
                <td>Active</td>
                <td></td>
            </tr>
-->
            </tbody>
    </table>
</article>
<script src='js/advancedsearch.js'></script>
