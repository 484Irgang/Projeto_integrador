<div class="form_field">
  <p>tipo de produto:</p>
  <input type="text" name="product_type" required placeholder="e.g. Comida" />
</div>

<div class="form_field">
  <select required>
    <option value="ACTIVE" " >Ativo</option>
    <option value="INACTIVE" >Inativo</option>
    <option value="SUSPENDED" >Suspenso</option>
  </select>
</div>

<div class="form_field date">
  <p>horário de entrega:</p>
  <input type="time" name="delivery_time" required/>
</div>

<div class="form_field">
  <p>preço por serviço:</p>
  <input type="number" name="price_by_service" placeholder="e.g. R$ 400,00" required/>
</div>

<div class="form_field">
  <p>tipo de serviço:</p>
  <input type="text" name="service_type" placeholder="e.g. Entrega" required/>
</div>

<div class="form_field">
  <p>numero de contrato:</p>
  <input type="number" name="contract_number" placeholder="e.g. 12345678" required/>
</div>