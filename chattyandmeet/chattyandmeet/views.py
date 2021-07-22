

from django.shortcuts import render
from django.contrib.auth import get_user_model
User=get_user_model()





def search_user(request):
    """ search function  """
    if request.method == "POST":
        query_name = request.POST.get('name', None)
        if query_name:
            results = User.objects.filter(username__contains=query_name)
            #user = qs.order_by("?").first()
            #return (user, None)
            #results = Product.objects.filter(name__contains=query_name)
            max_results = 6

            users_some = results

            size= len(results)

            return render(request, 'users/search_results.html', {	'users' : users_some,
																'mode' : 'users',
																'size' : size,
																'max_results' : max_results
															})

    return render(request, 'pages/home.html')

def search_users(request):
	if request.is_ajax():
		search_text = request.GET.get('search_text')
		users_all, size = queryset_users(request, search_text)
		max_results = 6
		if size >= max_results:
			users_some = users_all[:max_results]
			size = max_results
		else :
			users_some = users_all
		return render(request, 'users/search_results.html', {	'users' : users_some,
																'mode' : 'users',
																'size' : size,
																'max_results' : max_results
															})