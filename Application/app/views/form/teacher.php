<div class="form_field">
  <p>matricula:</p>
  <input type="number" name="registration" placeholder="e.g. 12345678" required/>
  <?php showFieldError('registration');?>
</div>

<div class="form_field">
  <select name="status" required>
    <option value="ACTIVE" selected>Ativo</option>
    <option value="INACTIVE" >Inativo</option>
    <option value="SUSPENDED" >Suspenso</option>
  </select>
</div>

<div class="form_field">
  <p>curso:</p>
  <input type="text" name="course" placeholder="e.g. Tecnologia da informação" required/>
</div>

<div class="form_field_radio">
  <h4><input type="radio" name="contract_type" value="PJ" checked /> PJ</h4>
  <h4><input type="radio" name="contract_type" value="CLT" /> CLT</h4>
</div>

<div class="form_field">
  <p>numero de contrato:</p>
  <input type="number" name="contract_number" placeholder="e.g. 12345678" required/>
</div>