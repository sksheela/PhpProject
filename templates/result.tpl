{include file="../templates/header.tpl"}
<div class="row">
    <div class="col-sm-12"> 
        <p class="fs-3 text-center " tabindex="0">uCertify Test Prep</p>
    </div>

    <div class="col-sm-12"> 
        <p class="fs-5 text-center" tabindex="0" ><span class="text-danger" tabindex="0"> Prep Test</span> <span class="fw-bold" tabindex="0">ON </span>{$generate_datetime} IST,<span class="text-success" tabindex="0"> Given Time</span> 00:15:00</p>
    </div>

    <div class="col-sm-12 text-center"> 
        <button class="btn btn-outline-primary" type="button" >
            <span><i class="bi bi-file-bar-graph"></i></span><span class="ps-1">{$user_data.result}%</span>
            <span>Result</span>
        </button>
        <button class="btn btn-outline-secondary" type="button" onclick="filterSelection('all')">
            <span><i class="fa-solid fa-bars"></i></span><span class="ps-1">{$user_data.items}</span>
            <span>Items</span>
        </button>
        <button class="btn btn-outline-success" type="button" onclick="filterSelection('correct')">
            <span><i class="fa-solid fa-check"></i></span><span class="ps-1">{$user_data.correct}</span>
            <span>Correct</span>
        </button>
        <button class="btn btn-outline-danger" type="button" onclick="filterSelection('wrong')">
            <span><i class="fa-solid fa-xmark"></i></span><span class="ps-1">{$user_data.in_correct}</span>
            <span>Incorrect</span>
        </button>
        <button class="btn btn-outline-warning" type="button" onclick="filterSelection('un_attempt')">
            <span><i class="fa-regular fa-eye-slash"></i></span><span class="ps-1">{$user_data.unattempt}</span>
            <span>Unattempted</span>
        </button>
    </div>
    
    <div class="col-sm-12 mt-3"> 
        <div class="table-responsive">
            <table class="table  table-striped table-hover ">
                <tbody>
                    {foreach $display_data as $item}
                        {if $item.is_attempt eq '1' && $item.is_user_select_option eq '1'}
                            {$class ="correct"}
                        {elseif $item.is_attempt eq '1' && $item.is_user_select_option eq '0'}
                            {$class ="wrong"}
                        {else}
                            {$class="un_attempt"}
                        {/if}
                        <tr class="filter-question align-middle show {$class}" tabindex="0">
                            <td class="align-middle  positio.n-relative" tabindex="0">
                                <div class="float-start square">{$item.id}</div>
                            </td>
                            <td class="placeholder col-sm-10" tabindex="0" >
                                <div ><a  href="http://localhost/smarty_project/review/index.php?item_id={$item.id}&content_id={$item.content_id}&select_option={$item.user_select_option}" class="link-dark text-decoration-none">{$item.question}</a></div>
                            </td>
                            {foreach $item.answers as $key=> $item_data}
                                <td scope="row" tabindex="0">
                                    <div class="d-flex justify-content-center">
                                        {if $item_data.is_correct eq '1' && $item.is_user_select_option eq '1'}
                                        <div class="answer_bullets  user_answer">{$show_options.$key}</div>
                                        {elseif (($item_data.is_correct eq '1') && ($item.is_attempt eq '0')) || (($item_data.is_correct eq '1') && ($item.is_attempt eq '1'))}
                                            <div class="answer_bullets correct_answer ">{$show_options.$key}</div>
                                        {elseif (($item_data.id == $item.user_select_option) && $item.is_attempt eq '1') }
                                            <div class="answer_bullets wrong_answer">{$show_options.$key}</div>
                                        {else}
                                            <div class="answer_bullets">{$show_options.$key}</div>
                                        {/if}
                                    </div>
                                </td>
                            {/foreach}
                            {if $item.is_attempt eq '1' && $item.is_user_select_option eq '1'}
                                <td scope="row" tabindex="0">
                                    <i class="bi bi-check-lg"></i>
                                </td>
                            {elseif $item.is_attempt eq '1' && $item.is_user_select_option eq '0'}
                                <td scope="row" tabindex="0">
                                    <i class="bi bi-x-lg">
                                </td>
                            {else}
                                <td scope="row" tabindex="0">
                                    <i class="bi bi-eye-slash"></i>
                                </td>
                            {/if}
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</div>


{include file="../templates/footer.tpl"}