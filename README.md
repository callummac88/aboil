www.icalms.com
==============

iCALMS Core O&amp;G Web Application

Data Uploading Scope

We have (at the moment and unlikely to change) the following tables. The fields are still subject to change/tweaking…..

NOTE: Out of habit I’ve added an auto increment field to all tables - these fields may be redundant and serve no purpose other than to confuse things or they may be useful when creating indexes, dunno.

tbl_Assets
This is a list of assets, an asset being an oil platform such as BP Andrew.

tbl_CALMSReport
This table contains multiple (only one at the moment) sets of data for any number of assets identified by an asset id which is a foreign key (if my memory of terminology serves me correctly) from the assets table.

tbl_Devices
This table contains information on devices (kit) including an asset id to tie it back to a specific asset. When multiple assets have been added to the system this table will contain duplicates (sort of) as Widget XYZ may exist with an asset ID of 1 and an asset ID of 2. The Widget is the same widget but they need the asset specific versions.

tbl_Impact
This table contains data on an asset by asset basis.

tbl_Lifecycle
This table contains data on an asset by asset basis.

tbl_Obsolesence
This table contains data on an asset by asset basis.

tbl_Risk
This table contains data on an asset by asset basis.

tbl_Vulnerability
This table contains data on an asset by asset basis.

If you pull the latest iCALMS repo you’ll get the latest db containing all the above.

The tbl_Assets table will be updated independently as assets are added to the system. It’s a simple list of assets within CALMS. The client will want to add assets by uploading a CSV table of assets. It might be easiest to simply dump the existing data and re-upload a complete list of assets when they want to add an asset or update it. Open to your thoughts although CSV's not a form for entering/editing data is the norm for this whole system.

As an aside they will always be running queries against their Access (yes Access) database to create the CSV files so we can dictate field names etc (I’m guessing). The attached is what they’re currently giving us - I use Sequal Pro to match their CSV fields against our tables.


What’s Needed
Shortly the tables will contain data for multiple assets so let’s assume the tables currently hold data for asset id 1, 2 & 3. Independently of each other asset data is updated. The data is effectively a snapshot at any moment in time. For example asset id 1 might get updated in May and asset id 2 in September. When an assets data is updated all old data for that asset (except in the assets table) is deleted and replaced with new data e.g. for all tables except tbl_Assets DELETE FROM XYZ WHERE asset = 1 type stuff - typing that helped me and wasn’t intended to insult you :)

Ideally a Core employee will upload a ZIP file of correctly formatted CSV files containing data for each of our tables for a specific asset. The CSV files will NEVER contain data for multiple assets. The ZIP file should be unpacked, the asset ID checked and  the tables all purged of current data for that asset and the new data imported.
