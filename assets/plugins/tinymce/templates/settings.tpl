<tr class="row1"> 
	<th colspan="2" style="text-align: left; font-weight: bold;">
		<h4>{$_tmcelang.tinymce_settings}</h4>
	</th>
</tr> 
<tr class="row1"> 
	<th><label for="tinymce_editor_theme">{$_tmcelang.tinymce_editor_theme_title}</label></th>
	<td class="x-form-element">
		<select name="tinymce_editor_theme" id="tinymce_editor_theme"
			class="combobox"
			modx:editable="0">
		{foreach from=$config.themes item=theme key=key}
			<option value="{$key}" {if $key EQ $config.tinymce_editor_theme} selected="selected"{/if}>{$theme}</option>
		{/foreach}
		</select>
		<span>{$_tmcelang.tinymce_editor_theme_message}</span>
	</td> 
</tr>
<tr class="row1"> 
	<th><label for="tinymce_custom_plugins">{$_tmcelang.tinymce_editor_custom_plugins_title}</label></th>
	<td class="x-form-element">
		<input name="tinymce_custom_plugins" id="tinymce_custom_plugins"
			type="text" class="textfield"
			modx:maxlength="65000"
			modx:width="300"
			value="{$config.plugins}"
			onchange="documentDirty=true;"
		/>
		<span>{$_tmcelang.tinymce_editor_custom_plugins_message}</span>
	</td> 
</tr>
<tr class="row1"> 
	<th><label>{$_tmcelang.tinymce_editor_custom_buttons_title}</label></th> 
	<td class="x-form-element">
		<label>
			Row 1:
			<input name="tinymce_custom_buttons1" id="tinymce_custom_buttons1"
				type="text" class="textfield"
				modx:maxlength="65000"
				modx:width="300"
				value="{$config.tinymce_custom_buttons1}"
				onchange="documentDirty=true;"
			/>
		</label>
		<br />
		<label>
			Row 2:
			<input name="tinymce_custom_buttons2" id="tinymce_custom_buttons2"
				type="text" class="textfield"
				modx:maxlength="65000"
				modx:width="300"
				value="{$config.tinymce_custom_buttons2}"
				onchange="documentDirty=true;" 
			/>
		</label>
		<br />
		<label>
			Row 3:
			<input name="tinymce_custom_buttons3" id="tinymce_custom_buttons3"
				type="text" class="textfield"
				modx:maxlength="65000"
				modx:width="300"
				value="{$config.tinymce_custom_buttons3}"
				onchange="documentDirty=true;" 
			/>
		</label>
		<br />
		<label>
			Row 4:
			<input name="tinymce_custom_buttons4" id="tinymce_custom_buttons4"
				type="text" class="textfield"
				modx:maxlength="65000"
				modx:width="300"
				value="{$config.tinymce_custom_buttons4}"
				onchange="documentDirty=true;" 
			/>
		</label>
		<br />
		<span>{$_tmcelang.tinymce_editor_custom_buttons_message}</span>
	</td>
</tr>
<tr class="row1"> 
	<th><label for="tinymce_css_selectors">{$_tmcelang.tinymce_editor_css_selectors_title}</label></th> 
	<td class="x-form-element">
		<input name="tinymce_css_selectors" id="tinymce_css_selectors"
			type="text" class="textfield"
			modx:maxlength="65000" 
			modx:width="300"
			value="{$config.css}"
			onchange="documentDirty=true;" 
		/>
		<span>{$_tmcelang.tinymce_editor_css_selectors_message}</span>
	</td> 
</tr>