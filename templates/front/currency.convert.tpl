{if (isset($list))}
    <form style="border: 1px solid #ccc; padding: 20px; border-radius: 5px;">
        <div class="form-group">
            <label>Select First Currency</label>
            <select class="form-control currency_list" id="first_currency">
                {foreach $list as $key => $item}
                    <option value="{$key}">{$item}</option>
                {/foreach}
            </select>

            <label>Select Second Currency</label>
            <select class="form-control currency_list" id="second_currency">
                {foreach $list as $key => $item}
                    <option value="{$key}">{$item}</option>
                {/foreach}
            </select>
            <div class="currency_result"></div>
        </div>

    </form>

    {ia_print_js files='_IA_URL_modules/currency/js/front/currency'}

    {else}
        ko
{/if}