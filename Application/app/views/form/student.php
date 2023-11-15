<div class="form_field">
  <p>matricula:</p>
  <input type="number" name="registration" required placeholder="e.g. 12345678"/>
  <?php showFieldError('registration');?>
</div>

<div class="form_field">
  <select required>
    <option value="ACTIVE" >Ativo</option>
    <option value="INACTIVE">Inativo</option>
    <option value="SUSPENDED">Suspenso</option>
  </select>
</div>

<div class="form_field">
  <p>semestre:</p>
  <input type="number" name="current_semester" required />
</div>

<div class="form_field">
  <p>curso:</p>
  <input type="text" name="course" required placeholder="e.g. Tecnologia da informação"/>
</div>

<div class="form_field">
  <p>valor do curso:</p>
  <input type="number" name="course_value" placeholder="e.g. R$ 2.500,00"/>
</div>