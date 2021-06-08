[{$smarty.block.parent}]

<div class="form-group">
    <label class="control-label col-lg-3">Additional contact info</label>
    <div class="col-lg-9">
        <input class="form-control" type="text" maxlength="128"
               name="invadr[oxuser__extenduser_additionalcontactinfo]"
               value="[{$oxcmp_user->oxuser__extenduser_additionalcontactinfo->value}]"
               required=""
        >
    </div>
</div>