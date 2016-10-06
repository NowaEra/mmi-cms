{$categoryId = $request->categoryId}
<ul class="list ui-sortable" id="widget-list" data-category-id="{$categoryId}">
	{foreach $widgetModel->getWidgetRelations() as $widgetRelation}
	<li id="widget-item-{$widgetRelation->id}" class="ui-sortable-handle">
		<div>
			{$widgetPreviewRequest = $widgetRelation->getWidgetRecord()->getMvcPreviewParamsAsRequest()}
			{widget($widgetPreviewRequest->module, $widgetPreviewRequest->controller, $widgetPreviewRequest->action, $widgetPreviewRequest->toArray() + ['widgetId' => $widgetRelation->id])}
		</div>
		<div>
			<a href="{@module=cmsAdmin&controller=categoryWidgetRelation&action=config&widgetId={$widgetRelation->getWidgetRecord()->id}&categoryId={$categoryId}&id={$widgetRelation->id}@}" class="button new-window edit" target="_blank"><i class="icon-edit"></i> edytuj</a>
			<a href="{@module=cmsAdmin&controller=categoryWidgetRelation&action=delete&categoryId={$categoryId}&id={$widgetRelation->id}@}" class="button delete-widget" target="_blank" title="Czy na pewno usunąć widget"><i class="icon-remove-sign"></i> usuń</a>
		</div>
	</li>
	{/foreach}
</ul>