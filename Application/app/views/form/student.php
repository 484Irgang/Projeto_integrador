<div class="form_field">
  <p>matricula:</p>
  <input type="number" name="registration" required value="<?php returnField($user ?? null, 'registration')?>" placeholder="e.g. 12345678"/>
  <?php showFieldError('registration');?>
</div>
<div class="form_field">
  <select name="status" required>
    <option <?php echo returnCheckedOrSelected($user ?? null, 'status', 'INACTIVE', 'selected')?> value="INACTIVE">Inativo</option>
    <option <?php echo returnCheckedOrSelected($user ?? null, 'status', 'SUSPENDED', 'selected')?> value="SUSPENDED">Suspenso</option>
    <option <?php echo returnCheckedOrSelected($user ?? null, 'status', 'ACTIVE', 'selected')?> value="ACTIVE" >Ativo</option>
  </select>
</div>

<div class="form_field">
  <p>semestre:</p>
  <input type="number" name="current_semester" value="<?php returnField($user ?? null, 'current_semester')?>" required />
</div>

<div class="form_field">
  <p>curso:</p>
  <input type="text" name="course" value="<?php returnField($user ?? null, 'course' )?>"  required placeholder="e.g. Tecnologia da informação"/>
</div>

<div class="form_field">
  <p>valor do curso:</p>
  <input type="number" name="course_value" value="<?php returnField($user ?? null, 'course_value')?>" required placeholder="e.g. R$ 2.500,00"/>
</div>