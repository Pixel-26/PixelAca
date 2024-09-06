<div id="editProductModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form name="edit_product" id="edit_product">
					<div class="modal-header">						
						<h4 class="modal-title">Editar Producto</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Código</label>
							<input type="text" name="edit_code"  id="edit_code" class="form-control" required>
							<input type="hidden" name="edit_id" id="edit_id" >
						</div>
						<div class="form-group">
							<label>Producto</label>
							<input type="text" name="edit_name" id="edit_name" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="category">Categoría</label>
							<select name="edit_category" id="edit_category" class="form-control" required>
								<option value="">--- Categorias ---</option>
								<option value="Libros">Libros</option>
								<option value="Electrónica">Electrónica</option>
								<option value="Ropa">Ropa</option>
								<option value="Zapatos">Zapatos</option>
								<option value="Hogar y Jardín">Hogar y Jardín</option>
								<option value="Juguetes">Juguetes</option>
								<option value="Deportes y Aire Libre">Deportes y Aire Libre</option>
								<option value="Alimentos y Bebidas">Alimentos y Bebidas</option>
								<option value="Belleza y Cuidado Personal">Belleza y Cuidado Personal</option>
								<option value="Automóviles y Motocicletas">Automóviles y Motocicletas</option>
								<option value="Salud y Bienestar">Salud y Bienestar</option>
								<option value="Música y Películas">Música y Películas</option>
								<option value="Herramientas y Mejoras para el Hogar">Herramientas y Mejoras para el Hogar</option>
								<option value="Joyería">Joyería</option>
								<option value="Relojes">Relojes</option>
								<option value="Oficina y Escolar">Oficina y Escolar</option>
								<option value="Muebles">Muebles</option>
								<option value="Artes y Manualidades">Artes y Manualidades</option>
								<option value="Mascotas">Mascotas</option>
								<option value="Coleccionables">Coleccionables</option>
							</select>
						</div>
						<div class="form-group">
							<label>Stock</label>
							<input type="number" name="edit_stock" id="edit_stock" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Precio</label>
							<input type="text" name="edit_price" id="edit_price" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-info" value="Guardar datos">
					</div>
				</form>
			</div>
		</div>
	</div>