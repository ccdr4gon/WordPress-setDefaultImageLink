import { createHooks } from '@wordpress/hooks';

function modifyLinkDestinationDefault(settings, name) {
    if (name !== "core/image") {
        return settings;
    }
    settings.attributes.linkDestination.default = "media";
    return settings;
}

wp.hooks.addFilter(
    "blocks.registerBlockType",
    "modify-linkDestination-default",
    modifyLinkDestinationDefault
);