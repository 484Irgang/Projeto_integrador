<div class="form_field">
  <p>matricula:</p>
  <input type="number" name="registration" placeholder="e.g. 12345678"  value="<?php returnField($user ?? null, 'registration')?>" required/>
  <?php showFieldError('registration');?>
</div>

<div class="form_field">
  <select name="status" required>
    <option <?php echo returnCheckedOrSelected($user ?? null, 'status', 'ACTIVE', 'selected')?> value="ACTIVE" selected>Ativo</option>
    <option <?php echo returnCheckedOrSelected($user ?? null, 'status', 'INACTIVE', 'selected')?> value="INACTIVE" >Inativo</option>
    <option <?php echo returnCheckedOrSelected($user ?? null, 'status', 'SUSPENDED', 'selected')?> value="SUSPENDED" >Suspenso</option>
  </select>
</div>

<div class="form_field">
  <p>curso:</p>
  <input type="text" name="course" placeholder="e.g. Tecnologia da informação"  value="<?php returnField($user ?? null, 'course')?>" required/>
</div>

<div class="form_field_radio">
  <h4><input type="radio" name="contract_type" value="PJ" checked <?php echo returnCheckedOrSelected($user ?? null, 'contract_type', 'PJ', 'checked')?>/> PJ</h4>
  <h4><input type="radio" name="contract_type" value="CLT" <?php echo !isset($user) ? 'checked' : returnCheckedOrSelected($user ?? null, 'contract_type', 'CLT', 'checked')?> /> CLT</h4>
</div>

<div class="form_field">
  <p>numero de contrato:</p>
  <input type="number" name="contract_number" placeholder="e.g. 12345678"  value="<?php returnField($user ?? null, 'contract_number')?>" required/>
</div>