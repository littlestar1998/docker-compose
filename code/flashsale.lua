--
-- Created by IntelliJ IDEA.
-- User: xiaoxingxing
-- Date: 2019/11/22
-- Time: 5:49 PM
-- To change this template use File | Settings | File Templates.
--

local key_name = KEYS[1]
local decrby_count = tonumber(ARGV[1])
local goods_count = tonumber(redis.call("get",key_name))

if goods_count > 0 then
    redis.call("decrby",key_name,decrby_count)
    return tonumber(redis.call("get",key_name))
else
    return 0
end
