<input type="number" name="registration" value="323235235" required/>
<?php showFieldError('registration');?>
<select name="status" required>
  <option value="ACTIVE" selected>Ativo</option>
  <option value="INACTIVE" >Inativo</option>
  <option value="SUSPENDED" >Suspenso</option>
</select>
<input type="text" name="course" value="34324234" required/>
<p><input type="radio" name="contract_type" value="PJ" checked /> PJ</p>
<p><input type="radio" name="contract_type" value="CLT" /> CLT</p>
<input type="number" name="contract_number" value="76564534" required/>
