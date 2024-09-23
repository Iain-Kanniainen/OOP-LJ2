{extends file="templates/layout.tpl"}

{block name="content"}
    <h1 class="mt-5">Result</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Waarde</th>
        </tr>
        </thead>
        <tbody>
        {foreach $data as $key => $item}
            <tr>
                <td scope="row">{$key}</td>
                <td scope="row">{$item}</td>
            </tr>
        {/foreach}
        </tbody>
    </table>


{/block}