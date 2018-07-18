<?php

return [

    /*
     * The view id of which you want to display data.
     */
    'view_id' => 168270524,

    /*
     * Path to the client secret json file. Take a look at the README of this package
     * to learn how to get this file. You can also pass the credentials as an array
     * instead of a file path.
     */
    'service_account_credentials_json' => [
        "type"=> "service_account",
        "project_id"=> "igneous-access-131623",
        "private_key_id"=> "3979cedeec99cfecfeef853bdb3129652a400d38",
        "private_key"=> "-----BEGIN PRIVATE KEY-----\nMIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCmeC6x8XiZF+si\n/m65k6m4Lh3AQw801WseYQfmbTl590OFXzbWmGniVSBnyB0u5kxYehc5XzH6nFjT\nhvcI9GYlJpMrC1U0s8zZbPunq9zLCRCqflwOqPNGeho5+/IHEiFfIojMbcu5hZBE\nzTSoDgykCdmsOGXywX0KyO9oe5M3oRhDPDouyGupynfTsgvoH32QmfQ+mK9Byg4v\nD2Iulw+chLe0P6p4rwncdmJF2umGwVQ+jH0atM27XWdv7WXYBp3n0qj6aeuYvNnI\nWL6ispm5OUWRp9jL9vxOxERFFwtfqLUibELz0fsCjneePfgMlZaM5zvrtZYWaPJS\nJI0drJBdAgMBAAECggEACq7oGEDJVdHbSIU1A1XaNca1llwb8G7JRl2u6NKoNlhL\njgQO/CwO/mHhmhUnwkyeKD7evdMdJmzhXL5qwZTKQMs+PlDLKKLWd6iBREC2lXCK\nNNba2mxIbRcFO5KKGZ7srHwqveK0P+L/KRIL/p/bn4iHcO4hpMoxxWyzetoUhZJQ\nmvarEx0X1zjLDMJLk7ZGU3uAi9qacxvO+4ztK4gDo/0IgdsiOD3brB/0Tl8Y14rH\nvHwHQj4Kv64b+Pu65rvDOqQkQ671ZPjhisQiQ0wcvREMusBLt46zUAFSWUo4E8Y4\nhMooieSrt1woEzgTIDtwUxzgFz65tVQTCkQx2TvUxQKBgQDisrfc90L1dr/aWOtY\ntYx0J8yL9iOIwe9X4DRInHDrgqIZ/zf9cBkq15zIAgLKGUeLTJFUzL9S/Hqh9SBi\nRryd38nbaEI9Px4nr7h2dIDww9quuyevF6/aKmxE9JITC7qfLCV6z7NXPrF8mpAx\nvWri5tKSCzLWMmuK0ymf3+15mwKBgQC7/IpKwt8hiiOZB1vtOKKmu1ucBlroHnxE\nLVCQqSVLuccksSFXCinLCb38am+Oip6ViiEenmqHORcfBwyIJvceRnzq+Mx/LpZT\nVpmpu8Zoxp5mQqbl97YGQ+L9CueUQN56KHE4o3NQEgZaRnVvDwn5K1nZTYbkMvls\n6ydNAwmZZwKBgANcuzVfxXJ2jGnkn7j1GFwwquv4fpZsqewXuy7IgzQ6/8R68I2l\nt/nWsNCWlwwAS/tY617imoPUks0MIarTecCtrQTACxt1cDEOfiHjoHXxsbCdvfzu\n0QDfWDO9nN0Dc4Ug1n13zyUgHOnIMRNLx+YNnlnkKKDcppOshhWE8LS5AoGAdQ0H\ncwup8fFYvwVlCO2V4WmR3jHa0uOAjtcEbj7T+TXhOQiN8OtkIIedY5lGgyPvIL/U\nZYNQY4h5zBkQhYp1nsVXLNvkQWDZu2SV46kHHuBlatkfoNu/3GDS6qqqjZZisP+T\nmCe2OmouyHFM1+0uUZbbqEHstxTCWD6Hxx0YEgsCgYEAuZl4rU5HDKDiYI57WmTF\nDbJbz3JD3O9CufdII19MCFT1vwDn5EyvWXR7aV+XouhBwJYqrNndJRGK3++DRQRW\nWDtWilCHoiasciXQHuxYOP9/CxujyCmRVKMmOm6dFdaMBSvT64yLa8jJZrmkF41B\npfkKgeasmwTSVJRGwbDOIN4=\n-----END PRIVATE KEY-----\n",
        "client_email"=> "kekerenan@igneous-access-131623.iam.gserviceaccount.com",
        "client_id"=> "102641136426642494808",
        "auth_uri"=> "https://accounts.google.com/o/oauth2/auth",
        "token_uri"=> "https://accounts.google.com/o/oauth2/token",
        "auth_provider_x509_cert_url"=> "https://www.googleapis.com/oauth2/v1/certs",
        "client_x509_cert_url"=> "https://www.googleapis.com/robot/v1/metadata/x509/kekerenan%40igneous-access-131623.iam.gserviceaccount.com"
    ],

    /*
     * The amount of minutes the Google API responses will be cached.
     * If you set this to zero, the responses won't be cached at all.
     */
    'cache_lifetime_in_minutes' => 60 * 24,

    /*
     * Here you may configure the "store" that the underlying Google_Client will
     * use to store it's data.  You may also add extra parameters that will
     * be passed on setCacheConfig (see docs for google-api-php-client).
     *
     * Optional parameters: "lifetime", "prefix"
     */
    'cache' => [
        'store' => 'file',
    ],
];
