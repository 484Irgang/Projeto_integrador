<div class="form_field">
  <p>tipo de produto:</p>
  <input type="text" name="product_type" required placeholder="e.g. Comida" value="<?php returnField($user ?? null, 'product_type')?>"/>
</div>

<div class="form_field">
  <select name="status" required>
    <option <?php echo returnCheckedOrSelected($user ?? null, 'status', 'ACTIVE', 'selected')?> value="ACTIVE" " >Ativo</option>
    <option <?php echo returnCheckedOrSelected($user ?? null, 'status', 'INACTIVE', 'selected')?> value="INACTIVE" >Inativo</option>
    <option <?php echo returnCheckedOrSelected($user ?? null, 'status', 'SUSPENDED', 'selected')?>  value="SUSPENDED" >Suspenso</option>
  </select>
</div>

<div class="form_field date">
  <p>horário de entrega:</p>
  <input type="time" name="delivery_time" required value="<?php returnField($user ?? null, 'delivery_time')?>"/>
</div>

<div class="form_field">
  <p>preço por serviço:</p>
  <input type="number" name="price_by_service" placeholder="e.g. R$ 400,00" required value="<?php returnField($user ?? null, 'price_by_service')?>"/>
</div>

<div class="form_field">
  <p>tipo de serviço:</p>
  <input type="text" name="service_type" placeholder="e.g. Entrega" required value="<?php returnField($user ?? null, 'service_type')?>"/>
</div>

<div class="form_field">
  <p>numero de contrato:</p>
  <input type="number" name="contract_number" placeholder="e.g. 12345678" required value="<?php returnField($user ?? null, 'contract_number')?>"/>
</div>